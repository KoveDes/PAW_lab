{extends file="main.tpl"}

{block name=content}

<section id="contact">
    <div class="inner">
        <section>
            <form action="{$config->action_url}login" method="post" autocomplete="on">
                <div class=" fields">
                    <div class="field">
                        <label for="login">Login:</label>
                                    <input type="text" name="login" id="login"  />
                    </div>
                    <div class="field">
                        <label for="pass">Hasło:</label>
                                    <input type="password" name="pass" id="pass"  />
                    </div>
                </div>
                <ul class="actions">
                    <li><input type="submit" value="zaloguj" id="pass" class="primary"  /></li>
                </ul>
            </form>
            </section>
            </div>
            </section>


{include file='messages.tpl'}

{/block}
