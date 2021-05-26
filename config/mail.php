<?php

// https://myaccount.google.com/apppasswords 要申請 application password for gmail
return [
    'driver'     => 'smtp',
    'host'       => 'smtp.gmail.com',
    'port'       => 587,
    'from'       => ['address' => 'cat357998@gmail.com', 'name' => '系統自動寄發'],
    'encryption' => 'tls',
    'username'   => 'cat357998@gmail.com',
    'password'   => 'vbecykbbehftgeas',
    'sendmail'   => '/usr/sbin/sendmail -bs',
    'pretend'    => false
];
