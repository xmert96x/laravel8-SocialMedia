 <x-app-layout>

            @if (Laravel\Fortify\Features::canUpdateProfileInformation())
                @livewire('profile.update-profile-information-form')


            @endif
<br>
            @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))

                    @livewire('profile.update-password-form')



            @endif
                <br>

            @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication())

                    @livewire('profile.two-factor-authentication-form')



            @endif
                <br>

            <div class="mt-10 sm:mt-0">
                @livewire('profile.logout-other-browser-sessions-form')
            </div>
                <br>
            @if (Laravel\Jetstream\Jetstream::hasAccountDeletionFeatures())


                <div class="mt-10 sm:mt-0">
                    @livewire('profile.delete-user-form')
                </div>
            @endif
                <br>

</x-app-layout>
