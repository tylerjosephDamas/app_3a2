<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

public function up()
{
    Schema::create('companies', function (Blueprint $table) {
        $table->id();
        $table->string('cnpj', 14)->unique();
        $table->string('company_name');
        $table->string('address');
        $table->string('phone');
        $table->timestamps();
    });
}

