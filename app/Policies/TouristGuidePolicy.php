<?php

namespace App\Policies;

use App\Models\TouristGuide;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class TouristGuidePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        return $user->hasAnyRole(['admin', 'staff']);    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\TouristGuide  $touristGuide
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, TouristGuide $touristGuide)
    {
        return $user->hasAnyRole(['admin', 'staff']);    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        return $user->hasAnyRole(['admin']);    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\TouristGuide  $touristGuide
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, TouristGuide $touristGuide)
    {
        return $user->hasAnyRole(['admin']);    
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\TouristGuide  $touristGuide
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, TouristGuide $touristGuide)
    {
        return $user->hasAnyRole(['admin']);    
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\TouristGuide  $touristGuide
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, TouristGuide $touristGuide)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\TouristGuide  $touristGuide
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, TouristGuide $touristGuide)
    {
        //
    }
}
