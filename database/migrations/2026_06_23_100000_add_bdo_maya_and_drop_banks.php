<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('donation_channels', function (Blueprint $table) {
            // 1. Add the missing columns if they don't exist
            if (!Schema::hasColumn('donation_channels', 'guidelines')) {
                $table->text('guidelines')->nullable();
            }
            if (!Schema::hasColumn('donation_channels', 'bdo_bank_name')) {
                $table->string('bdo_bank_name')->nullable();
            }
            if (!Schema::hasColumn('donation_channels', 'bdo_account_name')) {
                $table->string('bdo_account_name')->nullable();
            }
            if (!Schema::hasColumn('donation_channels', 'bdo_account_number')) {
                $table->string('bdo_account_number')->nullable();
            }
            if (!Schema::hasColumn('donation_channels', 'bdo_qr')) {
                $table->string('bdo_qr')->nullable();
            }
            if (!Schema::hasColumn('donation_channels', 'maya_bank_name')) {
                $table->string('maya_bank_name')->nullable();
            }
            if (!Schema::hasColumn('donation_channels', 'maya_account_name')) {
                $table->string('maya_account_name')->nullable();
            }
            if (!Schema::hasColumn('donation_channels', 'maya_account_number')) {
                $table->string('maya_account_number')->nullable();
            }
            if (!Schema::hasColumn('donation_channels', 'maya_qr')) {
                $table->string('maya_qr')->nullable();
            }

            // 2. Drop the old bank1 and bank2 columns (if they exist)
            $columnsToDrop = ['bank1_name', 'bank1_account_name', 'bank1_account_number',
                              'bank2_name', 'bank2_account_name', 'bank2_account_number'];
            foreach ($columnsToDrop as $column) {
                if (Schema::hasColumn('donation_channels', $column)) {
                    $table->dropColumn($column);
                }
            }
        });
    }

    public function down()
    {
        Schema::table('donation_channels', function (Blueprint $table) {
            // Re-add old columns for rollback
            $table->string('bank1_name')->nullable();
            $table->string('bank1_account_name')->nullable();
            $table->string('bank1_account_number')->nullable();
            $table->string('bank2_name')->nullable();
            $table->string('bank2_account_name')->nullable();
            $table->string('bank2_account_number')->nullable();

            // Drop new columns
            $table->dropColumn([
                'guidelines',
                'bdo_bank_name',
                'bdo_account_name',
                'bdo_account_number',
                'bdo_qr',
                'maya_bank_name',
                'maya_account_name',
                'maya_account_number',
                'maya_qr',
            ]);
        });
    }
};
