<?php

// Existing imports
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    // Add the HasApiTokens trait here
    use HasApiTokens, HasFactory, Notifiable;

    // Existing code
}