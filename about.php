<style>

.modern-accordion .accordion-item{
    border: none;
    margin-bottom: 12px;
    border-radius: 14px !important;
    overflow: hidden;
    background: white;
    box-shadow: 0 5px 15px rgba(0,0,0,0.06);
}

.modern-accordion .accordion-button{
    background: white;
    color: #0f172a;
    font-weight: 600;
    font-size: 17px;
    padding: 18px 20px;
    box-shadow: none;
}

.modern-accordion .accordion-button:not(.collapsed){
    background: #0f172a;
    color: white;
}

.modern-accordion .accordion-button:focus{
    box-shadow: none;
}

.modern-accordion .accordion-body{
    background: #f8fafc;
    color: #475569;
    font-size: 15px;
    line-height: 1.7;
    padding: 20px;
}

</style>


<div class="accordion modern-accordion" id="accordionExample">

  <div class="accordion-item">

    <h2 class="accordion-header">
      <button class="accordion-button"
      data-bs-toggle="collapse"
      data-bs-target="#hobby">

        Hobby

      </button>
    </h2>

    <div id="hobby"
    class="accordion-collapse collapse show">

      <div class="accordion-body">
        Bermain gitar, bermain sepak bola,
        dan belajar web development.
      </div>

    </div>
  </div>


  <div class="accordion-item">

    <h2 class="accordion-header">
      <button class="accordion-button collapsed"
      data-bs-toggle="collapse"
      data-bs-target="#makanan">

        Favorite Food

      </button>
    </h2>

    <div id="makanan"
    class="accordion-collapse collapse">

      <div class="accordion-body">
        Nasi goreng, mie ayam,
        dan makanan pedas.
      </div>

    </div>
  </div>

</div>