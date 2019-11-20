<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use App\User;
use App\Models\Admin\Task;

class TaskPolicy {

    use HandlesAuthorization;

    /**
     * 
     * @param User $user
     * @param Task $task
     * @return type
     */
    public function destroy(User $user, Task $task) {
	return $task->user()->first()->id == $user->id;
    }

}
