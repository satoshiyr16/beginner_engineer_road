<template>
  <div class="l-page_container">
    <div class="l-add_post_container">
      <main id="sample">
        <Editor
          api-key="dtnfhme7mtnqfb2jb8u57wx7y6kqydp7io6i7a2jf6g8y77r"
          :init="{
            toolbar_mode: 'sliding',
            plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
            toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
            language: 'ja',
            height: 200,
            width: 300,
          }"
          v-model="postTitle"
          initial-value="ここに入力してください"
        />
      </main>
      <main id="sample">
        <Editor
          api-key="dtnfhme7mtnqfb2jb8u57wx7y6kqydp7io6i7a2jf6g8y77r"
          :init="{
            toolbar_mode: 'sliding',
            plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
            toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
            language: 'ja',
            height: 900,
            width: 1000,
          }"
          v-model="postContent"
          initial-value="ここに入力してください"
        />
      </main>
      <button @click="submitPostData">送信</button>
    </div>
  </div>
</template>

<script setup>
import Editor from '@tinymce/tinymce-vue';
import axios from 'axios';
import { ref } from 'vue';

const postTitle = ref('');
const postContent = ref('');

const submitPostData = async () => {
  try {
    const response = await axios.post('/api/posts', {
      title: postTitle.value,
      content: postContent.value
    });
    console.log(response.data);
    } catch(error) {
      if (error.response) {
    console.log('Response Data:', error.response.data);
    console.log('Status Code:', error.response.status);
    console.log('Error Message:', error.message);
  }
  }
}
</script>

<style scoped>
.l-add_post_container {
  width: 100%;
  height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
}
</style>
