<template>
    <li class="menu-has-children">
        <a href="#">
            <img class="language-picture" src="img/global.svg" alt />
        </a>
        <ul>
            <li @click="update('pt-br')">
                <a href="#">{{ portuguese }}</a>
            </li>
            <li @click="update('en')">
                <a href="#">{{ english }}</a>
            </li>
        </ul>
    </li>
</template>

<script>
import { HTTP } from "../services/api";
import { LOCALE } from "../utils/webServices";
import { OK, CREATED } from "../utils/httpStatusCodes";

export default {
    props: ["english", "portuguese"],
    methods: {
        update(param) {
            // Save the preference into local storage
            localStorage.setItem("preferenceLanguage", param);

            // Get the preference inside local storage
            this.setLocale(param);
        },
        setLocale(param) {
            HTTP.patch(LOCALE, {
                locale: param
            })
                .then(response => {
                    console.log(response);
                })
                .catch(error => {
                    console.log(error);
                });
        }
    }
};
</script>

<style scoped>
.language-picture {
    width: 16px;
}
</style>
