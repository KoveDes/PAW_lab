{extends file="main.tpl"}

{block name = content}
  <a href="{$config->action_url}logout" class="button ">Wyloguj</a>
        
                           <a href="{$config->action_url}calcCompute" class="button ">Powrót do kalkulatora</a>
        



        <section id="split">
    <div class="inner">
        <section class="">
        <div class="row">
        <h1> Historia: </h1>
                {include file='db_records.tpl'}
                </div>
    </section>
    </div>
    </section>

{/block}