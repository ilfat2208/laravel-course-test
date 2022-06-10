<?php

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;

use Leeto\MoonShine\Resources\BaseResource;
use Leeto\MoonShine\Fields\ID;
use App\Models\User;

class UserResource extends BaseResource
{
	public static string $model = User::class;

	public static string $title = 'Пользователь';

	public function fields(): array
	{
		return [
            ID::make()->sortable(),
        ];
	}

	public function rules(Model $item): array
	{
	    return [];
    }

    public function search(): array
    {
        return ['id'];
    }

    public function filters(): array
    {
        return [];
    }

    public function actions(): array
    {
        return [];
    }
}
