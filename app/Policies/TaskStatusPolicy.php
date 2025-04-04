<?php

namespace App\Policies;

use App\Models\TaskStatus;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class TaskStatusPolicy
{
    use HandlesAuthorization;

    public function viewAny(?User $user): bool
    {
        return true;
    }

    public function view(?User $user, TaskStatus $taskStatus): bool
    {
        return (bool)$user;
    }

    public function create(User $user): bool
    {
        return (bool)$user;
    }

    public function update(User $user, TaskStatus $taskStatus): bool
    {
        return (bool)$user;
    }

    public function delete(User $user, TaskStatus $taskStatus): bool
    {
        return (bool)$user;
    }
}
