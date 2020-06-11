


<button class="btn btn--primary" aria-controls="modal-name-1">Show modal window</button>

<div class="modal modal--animate-scale flex flex-center bg-contrast-higher bg-opacity-90% padding-md js-modal" id="modal-name-1">
  <div class="modal__content width-100% max-width-xs bg radius-md shadow-md" role="alertdialog" aria-labelledby="modal-title-1" aria-describedby="modal-description-1">
    <header>
     <section class="hero padding-y-xxl" style="background-image: url('../assets/images/bateau.jpg')">
        <div class="container max-width-adaptive-sm">
        </div>
        <p class="modal">Nom du yacht - 42 mètres</p>

    </section>



    </header>

    <div class="padding-y-sm padding-x-md">
      <div class="text-component">
        <p id="modal-description-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae culpa, inventore alias ab atque similique quod ea reprehenderit.</p>
      </div>
    </div>

    <footer class="padding-md">
      <div class="flex justify-end gap-xs">
        <button class="btn btn--primary">Book now</button>
      </div>
    </footer>
  </div>

  <button class="reset modal__close-btn modal__close-btn--outer display@md js-modal__close js-tab-focus">
    <svg class="icon icon--sm" viewBox="0 0 24 24">
      <title>Close modal window</title>
      <g fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="2">
        <line x1="3" y1="3" x2="21" y2="21" />
        <line x1="21" y1="3" x2="3" y2="21" />
      </g>
    </svg>
  </button>
</div>



<button class="btn btn--primary" aria-controls="drawer3">Show Drawer Panel</button>

<div class="drawer drawer--modal js-drawer js-drawer--modal" id="drawer3">
  <div class="drawer__content" role="alertdialog"  aria-labelledby="drawerTitle3">
    <div class="drawer__body padding-x-md padding-y-sm js-drawer__body">
      <div class="text-component">
        <h4 id="drawerTitle3">Drawer title</h4>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla molestiae laudantium quis et, veniam, eveniet aperiam facere dolorem iusto reiciendis veritatis dolorum nisi? Eligendi inventore nam nihil, rem dolores nulla autem repellat sunt iure omnis ullam nisi voluptatem id expedita beatae, officiis accusantium consequatur, ea dignissimos enim consequuntur odio cumque.
        </p>

        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla molestiae laudantium quis et, veniam, eveniet aperiam facere dolorem iusto reiciendis veritatis dolorum nisi? Eligendi inventore nam nihil, rem dolores nulla autem repellat sunt iure omnis ullam nisi voluptatem id expedita beatae, officiis accusantium consequatur, ea dignissimos enim consequuntur odio cumque. !!!!!
        </p>
      </div>
    </div>

    <button class="reset drawer__close-btn position-fixed js-tab-focus js-drawer__close">
      <svg class="icon" viewBox="0 0 16 16" ><title>Close drawer panel</title><g stroke-width="1" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"><line x1="13.5" y1="2.5" x2="2.5" y2="13.5"></line><line x1="2.5" y1="2.5" x2="13.5" y2="13.5"></line></g></svg>
    </button>
  </div>
</div>