<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Service;
use App\Models\Appointment;
use App\Models\QueueTicket;

class TestDataSeeder extends Seeder
{
    public function run(): void
    {
        for ($i = 1; $i <= 20; $i++) {
            User::create([
                'name' => "Пользователь $i",
                'email' => "user$i@mail.com",
                'password' => bcrypt('12345678'),
                'is_admin' => false,
            ]);
        }

        $services = [
            'Получение паспорта',
            'Замена паспорта',
            'Оформление ВНЖ',
            'Оформление РВП',
            'Продление визы',
            'Регистрация иностранца',
            'Снятие с регистрации',
            'Получение гражданства',
            'Проверка документов',
            'Выдача справки',
            'Временная регистрация',
            'Постоянная регистрация',
            'Замена загранпаспорта',
            'Оформление приглашения',
            'Миграционный учет',
            'Переоформление документов',
            'Консультация',
            'Подтверждение проживания',
            'Восстановление документов',
            'Подача заявления',
        ];

        foreach ($services as $service) {
            Service::create([
                'name' => $service,
                'description' => "Описание: $service",
                'duration' => rand(10, 60),
            ]);
        }

        for ($i = 1; $i <= 20; $i++) {
            Appointment::create([
                'user_id' => rand(1, 20),
                'service_id' => rand(1, 20),
                'appointment_time' => now()->addDays(rand(1, 10))->setTime(rand(9, 17), 0),
                'status' => 'pending',
            ]);
        }

        for ($i = 1; $i <= 20; $i++) {
            QueueTicket::create([
                'appointment_id' => $i,
                'queue_number' => 100 + $i,
                'status' => 'waiting',
            ]);
        }
    }
}