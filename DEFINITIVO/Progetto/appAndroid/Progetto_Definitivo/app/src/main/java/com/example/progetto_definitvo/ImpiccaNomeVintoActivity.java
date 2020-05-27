package com.example.progetto_definitvo;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.TextView;

public class ImpiccaNomeVintoActivity extends AppCompatActivity implements View.OnClickListener{

    private Button btnRigioca;
    private TextView txtParola;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_impicca_nome_perso);
        Intent perso = getIntent();
        String par = perso.getStringExtra("parola");
        btnRigioca = findViewById(R.id.btnRigioca);
        txtParola = findViewById(R.id.txtParola);
        txtParola.setText(getString(R.string.txtparola)+par);
        btnRigioca.setOnClickListener((View.OnClickListener) this);
    }

    @Override
    public void onClick(View v) {
        switch (v.getId()){
            case R.id.btnRigioca:
                Intent partita = new Intent(getApplicationContext(),ImpiccaNomeActivity.class);
                startActivity(partita);
                break;
        }
    }

    @Override
    protected void onResume() {
        super.onResume();
        btnRigioca.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent intent2= new Intent(getApplicationContext(),IntentActivity.class);
                intent2 = new Intent(getApplicationContext(), IntentActivity.class);
                intent2.putExtra("titolo", "IMPICCANOME");
                intent2.putExtra("immagine", R.drawable.circus);
                intent2.putExtra("titolo_istruzioni", R.string.txtHelpNomi);
                intent2.putExtra("testo_istruzioni", R.string.testo_nomi);
                startActivity(intent2);
            }
        });
    }
    @Override
    public void onBackPressed() {
        Intent intent2= new Intent(getApplicationContext(),IntentActivity.class);
        intent2 = new Intent(getApplicationContext(), IntentActivity.class);
        intent2.putExtra("titolo", "IMPICCANOME");
        intent2.putExtra("immagine", R.drawable.circus);
        intent2.putExtra("titolo_istruzioni", R.string.txtHelpNomi);
        intent2.putExtra("testo_istruzioni", R.string.testo_nomi);
        startActivity(intent2);
    }
}
