<?php

namespace App\Controllers;

class Profileimage extends BaseController
{
    public function edit()
    {
        return view('Profileimage/edit');
    }

    public function update()
    {
        $file = $this->request->getFile('image');

        if ( ! $file->isValid()) {

            $error_code = $file->getError();

            if ($error_code == UPLOAD_ERR_NO_FILE) {

                return redirect()->back()
                                 ->with('warning', lang('Profileimage.noselec'));
            }

            throw new \RuntimeException($file->getErrorString() . " " . $error_code);
        }

        $size = $file->getSizeByUnit('mb');

        if ($size > 2) {
            
            return redirect()->back()
                             ->with('warning', lang('Profileimage.maxMB'));
        }

        $type = $file->getMimeType();

        if ( ! in_array($type, ['image/png', 'image/jpeg'])) {

            return redirect()->back()
                             ->with('warning', lang('Profileimage.invalidF'));
        }

        $path = $file->store('profile_images');

        $path = WRITEPATH . 'uploads/' . $path;

        service('image')
            ->withFile($path)
            ->fit(200, 200, 'center')
            ->save($path);

        $user = service('auth')->getCurrentUser();

        $user->profile_image = $file->getName();

        $model = new \App\Models\UserModel;

        $model->protect(false)
              ->save($user);

        return redirect()->to("/profile/show")
                         ->with('info', lang('Profileimage.imageup'));
    }

    public function delete()
    {
        if ($this->request->getMethod() === 'post') {

            $user = service('auth')->getCurrentUser();
            
            $path = WRITEPATH .'uploads/profile_images/' . $user->profile_image;

            if (is_file($path)) {

            unlink($path);
        }

        $user->profile_image = null;

        $model = new \App\Models\UserModel;

        $model->protect(false)
              ->save($user);

        return redirect()->to('/profile/show')
                         ->with('info', lang('Profileimage.imagede'));
        }

        return view('Profileimage/delete');
    }
}