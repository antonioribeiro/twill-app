<template>
    <!-- eslint-disable -->
    <div class="block__body">
        @a17-title('Picture') @a17-icon('image')<a17-textfield
            label="Author"
            :name="fieldName('author')"
            type="text"
            in-store="value"
        ></a17-textfield>
    </div>
</template>

<script>
import BlockMixin from "@/mixins/block";

export default {
    mixins: [BlockMixin]
};
</script>
