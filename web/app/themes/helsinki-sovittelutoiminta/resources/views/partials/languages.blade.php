@if ($language_navigation && sizeof($language_navigation) > 1)
  <div class="site-languages">
    <button
      class="site-languages__button"
      aria-haspopup="true"
      aria-controls="site-languages"
      aria-expanded="false"
      aria-label="{{ __('Valitse kieli, Ändra språk, Change language', 'hds') }}"
    >
      <span class="hds-icon hds-icon--size-s hds-icon--globe site-languages__button__language-icon"></span>
        {{ $language_name }}
      <span class="site-languages__trigger hds-icon hds-icon--angle-down" aria-hidden="true"></span>
    </button>
    <ul class="site-languages__menu" id="site-languages">
      @foreach ($language_navigation as $item)
        @include('partials.menu-item', [
          'item' => $item,
          'name' => 'site-languages',
        ])
      @endforeach
    </ul>
  </div>
@endif
