<div class="p-contact l-contact">
  <div class="p-contact__inner l-inner">
    <div class="p-contact__title">
      <h2 class="c-title">
        <span class="c-title__en">contact</span><span class="c-title__ja">お問合せ</span>
      </h2>
    </div>
    <div class="p-contact__content">
      <div class="p-form">
        <dl class="p-form__wrap">
          <dt class="p-form__label"><label for="name">お名前<span>必須</span></label></dt>
          <dd class="p-form__input p-form-input">
            <input id="name" name="name" type="text" aria-required="true" required />
          </dd>
        </dl>
        <dl class="p-form__wrap">
          <dt class="p-form__label"><label for="email">メールアドレス<span>必須</span></label>
          </dt>
          <dd class="p-form__input p-form-input">
            <input id="email" name="email" type="email" pattern=".+@.+\..+" />
          </dd>
        </dl>
        <dl class="p-form__wrap">
          <dt class="p-form__label"><label for="tel">電話番号<span>必須</span></label></dt>
          <dd class="p-form__input p-form-input">
            <input id="tel" name="tel" type="tel" />
          </dd>
        </dl>
        <dl class="p-form__wrap">
          <dt class="p-form__label"><label for="message">お問合せ内容<span>必須</span></label></dt>
          <dd class="p-form__textarea p-form-textarea">
            <textarea id="message" name="message"></textarea>
          </dd>
        </dl>
        <div class="p-form__submit">
          <div class=" p-form-submit c-button">
            <input type="submit" value="SEND">
          </div>
        </div>
      </div>
    </div>