<div class="footer">
            <h2>
                <?php
                $user_agent = $_SERVER["HTTP_USER_AGENT"];
                if (strpos($user_agent, "Firefox") !== false) $browser = "Firefox";
                elseif (strpos($user_agent, "Opera") !== false) $browser = "Opera";
                elseif (strpos($user_agent, "Chrome") !== false) $browser = "Chrome";
                elseif (strpos($user_agent, "MSIE") !== false) $browser = "Internet Explorer";
                elseif (strpos($user_agent, "Safari") !== false) $browser = "Safari";
                else $browser = "Неизвестный";
                echo "Browser: $browser"
                ?>
                </h2>
        </div>