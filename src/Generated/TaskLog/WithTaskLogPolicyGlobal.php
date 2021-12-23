<?php

namespace Jdlx\Task\Generated\TaskLog;

use App\Models\User;
use Jdlx\Task\Models\TaskLog;

trait WithTaskLogPolicyGlobal
{
    /**
     * Determine whether the user can take action on the model
     *
     * @param\App\Models\User $userWithRequest
     * @return bool
     */
    public function before(User $userWithRequest)
    {
        if($userWithRequest->hasRole("Super Admin")){
            return true;
        }
        return null;
    }

    /**
     * Determine whether the user can view any models.
     *
     * @param\App\Models\User $userWithRequest
     * @return bool
     */
    public function viewAny(User $userWithRequest): bool
    {
        return $userWithRequest->hasPermissionTo("taskLog.view.*");
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param\App\Models\User $userWithRequest
     * @param \Jdlx\Task\Models\TaskLog $taskLog
     * @return bool
     */
    public function view(User $userWithRequest, TaskLog $taskLog): bool
    {
        return $userWithRequest->hasPermissionTo("taskLog.view.{$taskLog->id}");
    }

    /**
     * Determine whether the user can create models.
     *
     * @param\App\Models\User $userWithRequest
     * @return bool
     */
    public function create(User $userWithRequest): bool
    {
        return $userWithRequest->hasPermissionTo("taskLog.create");
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param\App\Models\User $userWithRequest
     * @param \Jdlx\Task\Models\TaskLog $taskLog
     * @return bool
     */
    public function update(User $userWithRequest, TaskLog $taskLog): bool
    {
        return $userWithRequest->hasPermissionTo("taskLog.update.{$taskLog->id}");
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param\App\Models\User $userWithRequest
     * @param \Jdlx\Task\Models\TaskLog $taskLog
     * @return bool
     */
    public function delete(User $userWithRequest, TaskLog $taskLog): bool
    {
        return $userWithRequest->hasPermissionTo("taskLog.delete.{$taskLog->id}");
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param\App\Models\User $userWithRequest
     * @param \Jdlx\Task\Models\TaskLog $taskLog
     * @return bool
     */
    public function restore(User $userWithRequest, TaskLog $taskLog): bool
    {
        return $userWithRequest->hasPermissionTo("taskLog.restore.{$taskLog->id}");
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param \Jdlx\Task\Models\TaskLog $userWithRequest
     * @param \Jdlx\Task\Models\TaskLog $taskLog
     * @return bool
     */
    public function forceDelete(User $userWithRequest, TaskLog $taskLog): bool
    {
        return $userWithRequest->hasPermissionTo("taskLog.delete.{$taskLog->id}");
    }
}



