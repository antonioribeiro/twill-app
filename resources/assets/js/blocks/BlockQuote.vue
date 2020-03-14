<template>
    <!-- eslint-disable -->
    <div class="block__body">
        @a17-title('QUOTE Title Extended') @a17-icon('text')<a17-locale
            type="a17-textfield"
            :attributes="{
                label: 'Quote',
                name: fieldName('quote'),
                type: 'text',
                inStore: 'value'
            }"
        ></a17-locale>
    </div>
</template>

<script>
import BlockMixin from "@/mixins/block";

export default {
    mixins: [BlockMixin]
};
</script>
