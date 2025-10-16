<div class="container">
        <h2>Cálculo de Circuito Eléctrico (DC)</h2>
        <form action="calcular.php" method="POST">
            <label for="voltaje">Tensión o Voltaje (V):</label>
            <input type="number" id="voltaje" name="voltaje" step="0.01" min="0" required 
                   placeholder="Ej: 12.00">

            <label for="resistencia">Resistencia Eléctrica (Ω):</label>
            <input type="number" id="resistencia" name="resistencia" step="0.01" min="0" required
                   placeholder="Ej: 8.00">
            
            <input type="submit" value="Calcular Magnitudes">
        </form>
    </div>
    // Intensidad (I = V / R)
// Evita la división por cero si la resistencia es 0
$intensidad = ($resistencia > 0) ? ($voltaje / $resistencia) : 0.00;

// Potencia (P = V * I)
$potencia = $voltaje * $intensidad;

// Energía consumida en 1 hora (E = P * 3600)
$energia = $potencia * 3600;

// Resistencia equivalente en paralelo (Rp = R / 2)
$resistencia_paralelo = $resistencia / 2;