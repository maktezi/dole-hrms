<?php

namespace App\Filament\Resources\EmployeeResource\Widgets;

use App\Models\Employee;
use App\Models\Applicant;
use App\Models\Application;
use App\Models\Department;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;

class EmployeeStatsOverview extends BaseWidget
{
    protected function getCards(): array
    {
        return [
            // Card::make('Department', Department::all()->count()),
            Card::make('Employees', Employee::all()->count()),
            Card::make('Vacancies', Application::all()->count()),
            Card::make('Applicants', Applicant::all()->count()),
        ];
    }
}
