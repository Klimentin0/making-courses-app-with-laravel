<x-layout>
    <div class="mr-10 ml-10 space-y-10">
        <section class="text-center">
            <x-common.section-heading>
                Регистрация
            </x-common.section-heading>
            <form action="" class="mt-6">
                @csrf
                <div>
                    <div>
                        <div class="grid grid-cels-1 gap-x-6 gap-y-8 sm:grid-cols-6">
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
                                    <x-form.input name="last_name" id="last_name" />

                                    <x-form.error name="last_name"/>
                                </div>
                            </x-form.field>

                            <x-form.field>
                                <x-form.label for="middle_name">Отчество</x-form.label>
                                <div class="mt-2">
                                    <x-form.input name="middle_name" id="middle_name" />

                                    <x-form.error name="middle_name"/>
                                </div>
                            </x-form.field>

                            <x-form.field>
                                <x-form.label for="email">Электронная почта</x-form.label>
                                <div class="mt-2">
                                    <x-form.input name="email" id="email" type="email" />

                                    <x-form.error name="email"/>
                                </div>
                            </x-form.field>

                            <x-form.field>
                                <x-form.label for="password">Пароль</x-form.label>
                                <div class="mt-2">
                                    <x-form.input name="password" id="password" type="password" />

                                    <x-form.error name="password"/>
                                </div>
                            </x-form.field>

                            <x-form.field>
                                <x-form.label for="password_confirmation">Подтверждение пароля</x-form.label>
                                <div class="mt-2">
                                    <x-form.input name="password_confirmation" id="password_confirmation" type="password_confirmation" />

                                    <x-form.error name="password_confirmation"/>
                                </div>
                            </x-form.field>
                        </div>
                    </div>
                </div>
                <div>
                    <a href="/">Отмена</a>
                    <x-form.button>Зарегестрироваться</x-form.button>
                </div>
            </form>
        </section>


    </div>
</x-layout>
