package com.example.layout;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.ImageView;
import android.widget.TextView;

import com.google.android.material.floatingactionbutton.FloatingActionButton;

import java.util.Objects;

public class IntentActivity extends AppCompatActivity {

    private TextView txtTitolo = null;
    private ImageView imgGioco = null;
    private FloatingActionButton btnHelp = null;
    private String titolo = null;
    private int immagine = 0;
    private int istruzioni = 0;
    private Intent intent;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_intent);

        txtTitolo = findViewById(R.id.txtTitoloIntent);
        imgGioco = findViewById(R.id.imgGioco);
        btnHelp = findViewById(R.id.btnHelp);
    }

    @Override
    protected void onResume() {
        super.onResume();
        titolo = Objects.requireNonNull(getIntent().getExtras()).getString("titolo");
        immagine = getIntent().getExtras().getInt("immagine");
        istruzioni = getIntent().getExtras().getInt("istruzioni");
        txtTitolo.setText(titolo);
        imgGioco.setImageResource(immagine);

        btnHelp.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                intent = new Intent(getApplicationContext(), HelpActivity.class);
                intent.putExtra("istruzioni", istruzioni);
                startActivity(intent);
            }
        });
    }
}
