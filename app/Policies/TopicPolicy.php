<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Topic;

class TopicPolicy extends Policy
{
    /*public function update(User $user, Topic $topic)
    {
        return $topic->user_id == $user->id;
        //return true;
    }

    public function destroy(User $user, Topic $topic)
    {
        return $topic->user_id == $user->id;
        //return true;
    }*/
    ##重复了代码,进行重构
    public function update(User $user, Topic $topic)
    {
        return $user->isAuthorOf($topic);
    }

    public function destroy(User $user, Topic $topic)
    {
        return $user->isAuthorOf($topic);
    }
}
