<?php

header('content-type: application/json');
exec('START c:\WINDOWS\system32\cmd.exe');
echo "ok";
echo json_encode(['time' => time(), 'date' => date('d.m.Y'), 'tech' => 'Vercel']);
