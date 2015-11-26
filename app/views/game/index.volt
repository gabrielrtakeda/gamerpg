<div class="field">
  {% for y in 1..28 %}
    <div class="row">
      {% for x in 1..28 %}
        <div class="land"
          data-coordinates="{[{x}]},{[{y}]}">
            <span class="debug-coords">{[{x}]},{[{y}]}</span>
          {# if (y == randomLand.play() and x == randomLand.play()) #}
          {% if  (y == 10 and x == 15) %}
            <mage></mage>
          {% endif %}
        </div>
      {% endfor %}
    </div>
  {% endfor %}
</div>
