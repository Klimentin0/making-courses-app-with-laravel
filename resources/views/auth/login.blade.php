
<x-layout>
    <div class="mr-10 ml-10 space-y-10">
        <section class="text-center">
            <x-common.section-heading>
                Вход в систему
            </x-common.section-heading>
            <form method="POST" action="/login" class="mt-6">
                @csrf
                    <div class=" gap-x-6 gap-y-8 grid-cols-6">

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

                    </div>
                <div class="mt-2">
                    <a href="/">Отмена</a>
                    <x-form.button>Войти</x-form.button>
                </div>
            </form>
        </section>


    </div>
</x-layout>
