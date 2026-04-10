<x-layout.layout>
    <x-slot:title>ItecDev | Software House</x-slot:title>

    <x-text.hero />

    <section id="servicios" class="bg-gray-50 dark:bg-gray-800 py-12 sm:py-16 md:py-20">
        <div class="max-w-screen-xl px-4 mx-auto">
            <div class="max-w-screen-md mb-8 sm:mb-12">
                <h2 class="text-2xl sm:text-3xl font-extrabold text-gray-900 dark:text-white">Especialidades</h2>
                <div class="h-1.5 w-20 bg-blue-600 mt-2 rounded"></div>
            </div>

            <div class="grid gap-6 sm:gap-8 md:grid-cols-3">
                <x-text.service-card title="Desarrollo Web" icon="web">
                    SPA y SSR con Laravel + Vue.js.
                </x-text.service-card>

                <x-text.service-card title="Soporte Tecnico" icon="support">
                    Mantenimiento preventivo y correctivo y optimización.
                </x-text.service-card>

                <x-text.service-card title="Data Analytics" icon="chart">
                    Visualización con Power BI.
                </x-text.service-card>

                <x-text.service-card title="Consultoría" icon="consulting">
                    Estrategias digitales personalizadas.
                </x-text.service-card>

                <x-text.service-card title="Capacitación" icon="training">
                    Formación en tecnologías web.
                </x-text.service-card>

                <x-text.service-card title="Infrestuctura" icon="infrastructure">
                    Soluciones en la nube y on-premise.
                </x-text.service-card>

                <x-text.service-card title="Base de Datos" icon="database">
                    Diseño y optimización de bases de datos.
                </x-text.service-card>
            </div>
        </div>
    </section>

</x-layout.layout>
