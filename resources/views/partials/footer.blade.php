<footer class="mt-auto border-t border-white/10 bg-ocean-mid text-white">
    <div class="mx-auto max-w-6xl px-4 py-10 sm:px-6">
        <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-4">
            <div>
                <x-logo variant="light" size="sm" />
                <p class="mt-3 text-sm leading-relaxed text-white/90">{{ __('motel.description') }}</p>
                <div class="mt-4 flex flex-wrap gap-3">
                    <a href="{{ config('motel.instagram_url') }}" target="_blank" rel="noopener noreferrer" class="text-white/80 transition hover:text-white" aria-label="Instagram">
                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/></svg>
                    </a>
                    <a href="{{ config('motel.google_maps_link') }}" target="_blank" rel="noopener noreferrer" class="text-white/80 transition hover:text-white" aria-label="Google Maps">
                        <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                    </a>
                    @if (config('motel.google_maps_reviews_url'))
                        <a href="{{ config('motel.google_maps_reviews_url') }}" target="_blank" rel="noopener noreferrer" class="text-xs font-medium text-white/90 hover:text-white">{{ __('site.footer.reviews') }}</a>
                    @endif
                </div>
            </div>
            <div>
                <h4 class="text-sm font-semibold uppercase tracking-wide text-white/80">{{ __('site.footer.contact') }}</h4>
                <ul class="mt-3 space-y-2 text-sm text-white/90">
                    <li>{{ __('motel.address') }}</li>
                    <li><a href="tel:{{ preg_replace('/\D/', '', config('motel.phone')) }}" class="hover:text-white/80">{{ config('motel.phone') }}</a></li>
                    <li><a href="mailto:{{ config('motel.email') }}" class="hover:text-white/80">{{ config('motel.email') }}</a></li>
                    <li>
                        <span class="text-white/80">{{ __('site.footer.hours') }}:</span>
                        {{ __('motel.hours') }}
                    </li>
                </ul>
            </div>
            <div>
                <h4 class="text-sm font-semibold uppercase tracking-wide text-white/80">{{ __('site.footer.explore') }}</h4>
                <ul class="mt-3 space-y-2 text-sm">
                    <li><a href="{{ route('home') }}" class="hover:text-white/80">{{ __('site.nav.home') }}</a></li>
                    <li><a href="{{ route('rooms.index') }}" class="hover:text-white/80">{{ __('site.nav.rooms') }}</a></li>
                    <li><a href="{{ route('menu') }}" class="hover:text-white/80">{{ __('site.nav.menu') }}</a></li>
                    <li><a href="{{ route('services') }}" class="hover:text-white/80">{{ __('site.nav.services') }}</a></li>
                    <li><a href="{{ route('about') }}" class="hover:text-white/80">{{ __('site.nav.about') }}</a></li>
                    <li><a href="{{ route('about') }}#faq" class="hover:text-white/80">{{ __('site.nav.faq') }}</a></li>
                    <li><a href="{{ route('contact') }}" class="hover:text-white/80">{{ __('site.nav.contact') }}</a></li>
                </ul>
            </div>
            <div>
                <h4 class="text-sm font-semibold uppercase tracking-wide text-white/80">{{ __('site.footer.stay_info') }}</h4>
                <ul class="mt-3 space-y-2 text-sm text-white/90">
                    <li><span class="text-white/80">{{ __('site.stay.check_in') }}:</span> {{ __('motel.stay.check_in') }}</li>
                    <li><span class="text-white/80">{{ __('site.stay.check_out') }}:</span> {{ __('motel.stay.check_out') }}</li>
                    <li><span class="text-white/80">{{ __('site.stay.payment') }}:</span> {{ __('motel.stay.payment') }}</li>
                </ul>
                <h4 class="mt-5 text-sm font-semibold uppercase tracking-wide text-white/80">{{ __('site.footer.policies') }}</h4>
                <ul class="mt-3 space-y-2 text-sm">
                    <li><a href="{{ route('policies') }}#privacy" class="hover:text-white/80">{{ __('site.footer.privacy') }}</a></li>
                    <li><a href="{{ route('policies') }}#terms" class="hover:text-white/80">{{ __('site.footer.terms') }}</a></li>
                    <li><a href="{{ route('policies') }}#cancellation" class="hover:text-white/80">{{ __('site.footer.cancellation') }}</a></li>
                </ul>
            </div>
        </div>
        <p class="mt-8 border-t border-white/10 pt-6 text-center text-xs text-white/60">
            &copy; {{ date('Y') }} {{ config('motel.logo_script') }} {{ config('motel.logo_subtitle') }}. {{ __('site.footer.rights') }}
        </p>
    </div>
</footer>
