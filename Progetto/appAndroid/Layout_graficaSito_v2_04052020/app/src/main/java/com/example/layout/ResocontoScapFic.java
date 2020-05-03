package com.example.layout;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.ImageView;
import android.widget.TextView;

import com.example.layout.R;

public class ResocontoScapFic extends AppCompatActivity {
    private TextView testoCorr,testoErr,testoVittoria;
    private Button button;
    private ImageView immagine;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_resoconto_scap_fic);
        testoCorr=findViewById(R.id.txtPunti);
        testoErr=findViewById(R.id.txtErrori);
        testoVittoria=findViewById(R.id.txtVittoria);
        button=findViewById(R.id.button);
        immagine=findViewById(R.id.Immagine);
        Intent intent=getIntent();
        String errori=intent.getStringExtra("Errori");
        String corrette=intent.getStringExtra("Corrette");
        String vittoria=intent.getStringExtra("Vittoria");
        if(vittoria.equals("Perso")){
            immagine.setImageResource(R.drawable.sconfitta);
            testoVittoria.setText("HAI PERSO!!!");
            testoVittoria.setTextColor(getResources().getColor(R.color.rosso));
        }
        testoErr.setText(errori);
        testoCorr.setText(corrette);
    }

    @Override
    protected void onResume() {
        super.onResume();
        button.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent intent2= new Intent(getApplicationContext(),IntentActivity.class);
                intent2 = new Intent(getApplicationContext(), IntentActivity.class);
                intent2.putExtra("titolo", "VIAGGIO NEL TEMPO DEI VERBI");
                intent2.putExtra("immagine", R.drawable.circus);
                intent2.putExtra("titolo_istruzioni", R.string.txtHelpVerbi);
                intent2.putExtra("testo_istruzioni", R.string.testo_verbi);
                startActivity(intent2);
            }
        });
    }
}

