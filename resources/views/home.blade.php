@extends('layout.app')
@section('css')
<style>
    /* GLOBAL STYLES
-------------------------------------------------- */
/* Padding below the footer and lighter body text */



/* CUSTOMIZE THE CAROUSEL
-------------------------------------------------- */

/* Carousel base class */
.carousel {
  margin-bottom: 4rem;
}
/* Since positioning the image, we need to help out the caption */
.carousel-caption {
  bottom: 3rem;
  z-index: 10;
}

/* Declare heights because of positioning of img element */
.carousel-item {
  height: 32rem;
}


/* MARKETING CONTENT
-------------------------------------------------- */

/* Center align the text within the three columns below the carousel */
.marketing .col-lg-4 {
  margin-bottom: 1.5rem;
  text-align: center;
}
/* rtl:begin:ignore */
.marketing .col-lg-4 p {
  margin-right: .75rem;
  margin-left: .75rem;
}
/* rtl:end:ignore */


/* Featurettes
------------------------- */

.featurette-divider {
  margin: 5rem 0; /* Space out the Bootstrap <hr> more */
}

/* Thin out the marketing headings */
/* rtl:begin:remove */
.featurette-heading {
  letter-spacing: -.05rem;
}
.feature-icon {
  width: 4rem;
  height: 4rem;
  border-radius: .75rem;
}

.icon-square {
  width: 3rem;
  height: 3rem;
  border-radius: .75rem;
}

.text-shadow-1 { text-shadow: 0 .125rem .25rem rgba(0, 0, 0, .25); }
.text-shadow-2 { text-shadow: 0 .25rem .5rem rgba(0, 0, 0, .25); }
.text-shadow-3 { text-shadow: 0 .5rem 1.5rem rgba(0, 0, 0, .25); }

.card-cover {
  background-repeat: no-repeat;
  background-position: center center;
  background-size: cover;
}

.feature-icon-small {
  width: 3rem;
  height: 3rem;
}


/* rtl:end:remove */

/* RESPONSIVE CSS
-------------------------------------------------- */

@media (min-width: 40em) {
  /* Bump up size of carousel content */
  .carousel-caption p {
    margin-bottom: 1.25rem;
    font-size: 1.25rem;
    line-height: 1.4;
  }

  .featurette-heading {
    font-size: 50px;
  }
}

@media (min-width: 62em) {
  .featurette-heading {
    margin-top: 7rem;
  }
}
 nav{
    width:100%;
   // background:#333;
    color:#fff;
    padding:4px 0;
    position:fixed;
    top:0;
    left:0;
    display:flex;
    justify-content:space-between;
    align-items:center;
    z-index:10;

}
.logo{
    width:180px;
}
nav ul li{
    display:inline-block;
    margin:5px 20px;
    list-style:none;
    font-size:16px;

}
</style>
@endsection
@section('content')
<main>
    @include('component.slider')
    @include('component.beritautama')
    
       <div class="b-example-divider"></div>
      <div class="container px-4 py-5">
        <h2 class="pb-2 border-bottom">Informasi Publik</h2>
        <div
          class="row row-cols-1 row-cols-md-2 align-items-md-center g-5 py-5"
        >
          <div class="col d-flex flex-column align-items-start gap-2">
            <h2 class="fw-bold text-body-emphasis">
              Left-aligned title explaining these awesome features
            </h2>
            <p class="text-body-secondary">
              Paragraph of text beneath the heading to explain the heading.
              We'll add onto it with another sentence and probably just keep
              going until we run out of words.
            </p>
            <a href="#" class="btn btn-primary btn-lg">Primary button</a>
          </div>
          <div class="col">
            <div class="row row-cols-1 row-cols-sm-2 g-4">
              <div class="col d-flex flex-column gap-2">
                <div
                  class="feature-icon-small d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-4 rounded-3"
                >
                  <svg class="bi" width="1em" height="1em" aria-hidden="true">
                    <use xlink:href="#collection"></use>
                  </svg>
                </div>
                <h4 class="fw-semibold mb-0 text-body-emphasis">
                  Kurikulum
                </h4>
                <p class="text-body-secondary">
                  Paragraph of text beneath the heading to explain the heading.
                </p>
              </div>
              <div class="col d-flex flex-column gap-2">
                <div
                  class="feature-icon-small d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-4 rounded-3"
                >
                  <svg class="bi" width="1em" height="1em" aria-hidden="true">
                    <use xlink:href="#gear-fill"></use>
                  </svg>
                </div>
                <h4 class="fw-semibold mb-0 text-body-emphasis">
                  Kesiswaan
                </h4>
                <p class="text-body-secondary">
                  Paragraph of text beneath the heading to explain the heading.
                </p>
              </div>
              <div class="col d-flex flex-column gap-2">
                <div
                  class="feature-icon-small d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-4 rounded-3"
                >
                  <svg class="bi" width="1em" height="1em" aria-hidden="true">
                    <use xlink:href="#speedometer"></use>
                  </svg>
                </div>
                <h4 class="fw-semibold mb-0 text-body-emphasis">
                  Hubinmas
                </h4>
                <p class="text-body-secondary">
                  Paragraph of text beneath the heading to explain the heading.
                </p>
              </div>
              <div class="col d-flex flex-column gap-2">
                <div
                  class="feature-icon-small d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-4 rounded-3"
                >
                  <svg class="bi" width="1em" height="1em" aria-hidden="true">
                    <use xlink:href="#table"></use>
                  </svg>
                </div>
                <h4 class="fw-semibold mb-0 text-body-emphasis">
                  Sarana dan Prasarana
                </h4>
                <p class="text-body-secondary">
                  Paragraph of text beneath the heading to explain the heading.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      @include('component.card')
</main>
@endsection