<div>
    <div class="flex items-center mt-4">
        <p class="quick-sand text-2xl orielly-text-primary mb-6 font-bold">{{ $title }}</p>
        <div class="ml-auto text-sm">
            <a href="{{ $url }}">
                <span class="undefined orielly-text-primary hover:underline">
                    <span class="mr-2">Lihat lainnya</span>
                    <i class="fa fa-arrow-right"></i>
                </span>
            </a>
        </div>
    </div>
    {{ $slot }}
</div>
