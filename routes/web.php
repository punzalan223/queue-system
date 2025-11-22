<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Volt::route('/', 'pages/home')->name('home');
Volt::route('/queue', 'pages/queue')->name('queue');