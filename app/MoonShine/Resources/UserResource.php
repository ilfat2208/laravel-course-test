<?php

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use Leeto\MoonShine\Fields\Text;

use Leeto\MoonShine\Resources\BaseResource;
use Leeto\MoonShine\Fields\ID;
use App\Models\User;
use Leeto\MoonShine\Actions\ExportAction;
use Leeto\MoonShine\Fields\Email;
use Leeto\MoonShine\Fields\Password;
use Leeto\MoonShine\Fields\PasswordRepeat;
use Leeto\MoonShine\Filters\TextFilter;

class UserResource extends BaseResource
{
	public static string $model = User::class;

	public static string $title = 'Пользователь';

	public function fields(): array
	{
		return [
            ID::make()->sortable()->showOnExport(),
            Text::make('Имя','name')->required()->showOnExport(),
            Email::make('E-mail','email')->required(),
            Password::make('Пароль','password')->hideOnIndex(),
            PasswordRepeat::make('Повторите пароль','password_repeat')->hideOnIndex()
        ];
	}

	public function rules(Model $item): array
	{
	    return [
            'name' => ['required'],
            'email' => ['required'],
            'password' => ['sometimes','nullable','min:6','required_with:password_repeat','same:password_repeat'],
        ];
    }

    public function search(): array
    {
        return ["id", "name", "email"];
    }

    public function filters(): array
    {
        return [
            TextFilter::make('Имя','name'),
        ];
    }

    public function actions(): array
    {
        return [
            ExportAction::make('Экспорт'),
        ];
    }
}
