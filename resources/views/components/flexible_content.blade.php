@foreach ($flexible_content as $flexblock)
    @if ($flexblock['acf_fc_layout'] == 'heading')
        @include ('components.flex.heading', $flexblock)
    @endif
@endforeach
