package com.example.layout;

import androidx.appcompat.app.AppCompatActivity;

import android.graphics.Color;
import android.os.Bundle;
import android.widget.TextView;

import java.util.Objects;

import static android.graphics.Color.rgb;

public class HelpActivity extends AppCompatActivity {

    private TextView txtHelp = null;
    private int istruzioni = 0;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_help);
        int colore = rgb(26, 188, 156);
        getWindow().getDecorView().setBackgroundColor(colore); //sfondo verde acqua come sito

        txtHelp = findViewById(R.id.txtHelp);
    }

    @Override
    protected void onResume() {
        super.onResume();
        istruzioni = Objects.requireNonNull(getIntent().getExtras()).getInt("istruzioni");
        txtHelp.setTextColor(Color.rgb(255,255,255));
        txtHelp.setText(istruzioni);


    }
}
