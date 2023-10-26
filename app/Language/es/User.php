<?php

return [
    'email' => [
        'is_unique' => 'El correo que ingresó ya está regristrado'
    ],
    'password_confirmation' => [
        'required' => 'Por favor confirmar la contraseña',
        'matches' => 'Por favor ingrese la contraseña'
    ]
];