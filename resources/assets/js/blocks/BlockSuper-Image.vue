<template>
    <!-- eslint-disable -->
    <div class="block__body">
        @a17-title('Super Image')
@a17-icon('image')<a17-inputframe label="Image" name="medias.image" > <a17-mediafield :name="fieldName('image')" crop-context="image" :with-video-url="false" ></a17-mediafield> </a17-inputframe> <a17-textfield label="Author" :name="fieldName('author')" type="text" in-store="value" ></a17-textfield><a17-singleselect label="Ratio" :name="fieldName('ratio')" :options="[{&quot;value&quot;:&quot;full&quot;,&quot;label&quot;:&quot;Full&quot;},{&quot;value&quot;:&quot;half&quot;,&quot;label&quot;:&quot;Half&quot;}]" selected="full" :grid="false" :inline="true" :has-default-store="true" in-store="value"
> </a17-singleselect>
    </div>
</template>

<script>
  import BlockMixin from '@/mixins/block'

  export default {
    mixins: [BlockMixin]
  }
</script>
