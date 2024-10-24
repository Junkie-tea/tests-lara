<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProposalController;

Route::get('/', [ProposalController::class, 'index']);

Route::post('/proposal', [ProposalController::class, 'create'])->name('proposal.create');

Route::post('/proposal/{id}', [ProposalController::class, 'update'])->name('proposal.update');
