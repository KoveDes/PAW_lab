{extends file="main.tpl"}

{block name=footer}
Wykonano jakimś cudem
{/block}

{block name=content}
<section id="contact">
    <div class="inner">
        <section>
            <form action="{$config->action_root}calcCompute" method="post" autocomplete="on">
                <div class=" fields">
                    <div class="field">
                        <label for="amount">Kwota (zł)</label>
                        <input type="text" name="amount" id="amount" value="{$form->amount}" />
                    </div>
                    <div class="field half">
                        <label for="time">Czas (w latach)</label>
                        <input type="text" name="time" id="time" value="{$form->time}" />
                    </div>
                    <div class="field half">
                        <label for="rate">Oprocentowanie (%)</label>
                        <input type="text" name="rate" id="rate" value="{$form->rate}" />
                    </div>
                </div>
                <ul class="actions">
                    <li><input type="submit" value="Oblicz ratę miesięczną" class="primary" /></li>
                </ul>
            </form>
            <section>
                <div class="fields">
                    {if $messages->isError()}
                    <h3 style="color:#e52424">Wystąpiły błędy:</h3>
                    <ol class="err">
                        {foreach $messages->getErrors() as $err}
                        {strip}
                        <li style="color:#d5be1d">{$err}</li>
                        {/strip}
                        {/foreach}
                    </ol>
                    {/if}

                    {if isset($res->result)}
                    <h2 style="color: black">Wynik: <span style="color: #1d975efa">{$res->result}</span> zł</h2>

                    {/if}

                </div>
            </section>
        </section>
        <section class="split">
            <section>
                {if $res->result != null}
                <img src="https://i2.wp.com/channongray.com/wp-content/uploads/2015/07/bb6ibz.jpg" alt="" srcset="">
                {/if}
                {if !isset($res->result)}
                <img src="https://media.thetab.com/blogs.dir/15/files/2021/05/179968839-277908557378446-3702554718123604703-n.jpg"
                    alt="" srcset="">
                {/if}
            </section>
        </section>
    </div>
</section>



{/block}