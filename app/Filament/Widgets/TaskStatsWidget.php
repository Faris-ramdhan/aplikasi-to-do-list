<?php

namespace App\Filament\Widgets;

use App\Models\Task;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class TaskStatsWidget extends BaseWidget
{
    // Mengatur urutan agar widget tampil di paling atas Dashboard
    protected static ?int $sort = 1;

    protected function getStats(): array
    {
        return [
            Stat::make('Tugas Pending', Task::where('status', 'pending')->count())
                ->description('Belum dikerjakan')
                ->descriptionIcon('heroicon-m-clock')
                ->color('gray'),

            Stat::make('Tugas In Progress', Task::where('status', 'in-progress')->count())
                ->description('Sedang dikerjakan')
                ->descriptionIcon('heroicon-m-arrow-path')
                ->color('warning'),

            Stat::make('Tugas Selesai', Task::where('status', 'done')->count())
                ->description('Sudah tuntas')
                ->descriptionIcon('heroicon-m-check-badge')
                ->color('success'),
        ];
    }
}