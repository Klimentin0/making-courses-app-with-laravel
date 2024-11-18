<x-layout>
    <div class="">
        <section class="text-center">
            <x-common.section-heading>
                Регистрация
            </x-common.section-heading>
            <form method="POST" action="/register" class="mt-6">
                @csrf
                <div>
                    <div>
                        <div class="flex flex-col space-y-1">
                           <x-form.field>
                                <x-form.label for="type">Вы учитель или ученик?</x-form.label>
                                <div class="mt-2">
                                    <label for='student' class="m-1">Ученик</label>
                                        <input name="type" id="student" type='radio' value='student' />
                                    <label for='teacher' class="m-1">Учитель</label>
                                        <input name="type" id="teacher" type='radio' value='teacher' />

                                        <x-form.error name="type"/>
                                </div>
                            </x-form.field>

                            <x-form.field>
                                <x-form.label for="year">Класс(цифра 9, 10 или 11)</x-form.label>
                                <div class="mt-2">
                                    <x-form.input name="year" id="year" />

                                    <x-form.error name="year"/>
                                </div>
                            </x-form.field>

                            <x-form.field>
                                <x-form.label for="first_name">Имя</x-form.label>
                                <div class="mt-2">
                                    <x-form.input name="first_name" id="first_name" />

                                    <x-form.error name="first_name"/>
                                </div>
                            </x-form.field>

                            <x-form.field>
                                <x-form.label for="last_name">Фамилия</x-form.label>
                                <div class="mt-2">
                                    <x-form.input name="last_name" id="last_name" required />

                                    <x-form.error name="last_name"/>
                                </div>
                            </x-form.field>

                            <x-form.field>
                                <x-form.label for="middle_name">Отчество</x-form.label>
                                <div class="mt-2">
                                    <x-form.input name="middle_name" id="middle_name" required />

                                    <x-form.error name="middle_name"/>
                                </div>
                            </x-form.field>

                            <x-form.field>
                                <x-form.label for="email">Электронная почта</x-form.label>
                                <div class="mt-2">
                                    <x-form.input name="email" id="email" type="email" required />

                                    <x-form.error name="email"/>
                                </div>
                            </x-form.field>

                            <x-form.field>
                                <x-form.label for="password">Пароль</x-form.label>
                                <div class="mt-2">
                                    <x-form.input name="password" id="password" type="password" required />

                                    <x-form.error name="password"/>
                                </div>
                            </x-form.field>

                            <x-form.field>
                                <x-form.label for="password_confirmation">Подтверждение пароля</x-form.label>
                                <div class="mt-2">
                                    <x-form.input name="password_confirmation" id="password_confirmation" type="password" required />

                                    <x-form.error name="password_confirmation"/>
                                </div>
                            </x-form.field>
                        </div>
                    </div>
                </div>
                <div class="mt-2">
                    <a href="/">Отмена</a>
                    <x-form.button>Зарегестрироваться</x-form.button>
                </div>
            </form>
        </section>


    </div>
</x-layout>
