<?php
if (get_post_type() == "post") {
    get_template_part("template/single/post");
} elseif (get_post_type() == "realisation") {
    get_template_part("template/single/real");
} elseif (get_post_type() == "presse") {
    get_template_part("template/single/presse-single");
} elseif (get_post_type() == "projet") {
    get_template_part("template/single/projet-single");
}
