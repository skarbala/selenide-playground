<!DOCTYPE html>
<html lang="en" xmlns:v-on="http://www.w3.org/1999/xhtml">
<head>
  <meta charset="UTF-8">
  <title>Spelleology</title>
  <link rel="stylesheet"
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Kanit:100i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lora:700" rel="stylesheet">
  <link rel="stylesheet" href="spelleology/style.css">
</head>
<body>
<?php include 'partials/navbar.php' ?>

<div id="app" class="container-fluid">
  <modal v-if="showModal" @close="showModal = false">
    <h2 slot="header">{{selectedSpell.name}}</h2>
    <h3 slot="body">{{selectedSpell.effect.charAt(0).toUpperCase() + selectedSpell.effect.slice(1)}}</h3>
    <h4 slot="body">{{selectedSpell.type}}</h4>
  </modal>
  <h1 class="text-center title">Spelleology</h1>
  <div class="form-group col-md-6">
    <input type="text" placeholder="search for spell effect" v-model="search" class="form-control search">
  </div>
  <ul class="spells row text-center">
    <li v-for="spell in filteredList" v-on:click="selectSpell(spell)">
      <div class="inner">
        {{spell.effect}}
      </div>
    </li>
  </ul>
</div>

</body>
<script type="text/x-template" id="modal-template">
  <transition name="modal">
    <div class="modal-mask">
      <div class="modal-wrapper">
        <div class="modal-container">

          <div class="modal-header">
            <slot name="header">
              default header
            </slot>
          </div>

          <div class="modal-body">
            <slot name="body">
              default body
            </slot>
          </div>
          <div class="modal-footer">
            <slot name="footer">
              <button class="modal-default-button btn-block btn" @click="$emit('close')">
                Close
              </button>
            </slot>
          </div>
        </div>
      </div>
    </div>
  </transition>
</script>
<script src="https://cdn.jsdelivr.net/npm/vue@2.5.21/dist/vue.js"></script>
<script src="spelleology/index.js"></script>
</html>
