<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Reply;

class ReplyPolicy extends Policy
{
    public function update(User $user, Reply $reply)
    {
        // return $reply->user_id == $user->id;
        return true;
    }

    public function destroy(User $user, Reply $reply)
    {
        //return true;
        //第一个表示该条评论的评论者           本话题是不是属于本话题的作者
        //即评论者可以删除自己评论的内容     话题的作者也可以删除某评论者的评论
        return $user->isAuthorOf($reply) || $user->isAuthorOf($reply->topic);
    }
}
