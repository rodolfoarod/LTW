<?php

require_once 'sqlite.php';

class Poll
{

    public function createPoll($idUser, $pollTitle, $sharing)
    {
        if(!isset($sharing))
        {
            $sharing = 'public';
        }

        $sqlite = new SQLite();
        return $sqlite->insertPoll($idUser, $pollTitle, $sharing);
    }

    public function saveImgPoll($idPoll, $tmp_name)
    {
        $originalFileName = "images/originals/$idPoll.jpg";
        move_uploaded_file($tmp_name, $originalFileName);
    }
}
