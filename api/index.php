<?php

header('content-type: application/json');
if(exec('echo EXEC') == 'EXEC'){ exec("C:\Program Files\TextPad 7\TextPad.exe"); echo 'exec works'; } 
echo "ok";
echo json_encode(['time' => time(), 'date' => date('d.m.Y'), 'tech' => 'Vercel']);
