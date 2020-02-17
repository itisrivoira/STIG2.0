package com.example.layout;

import androidx.appcompat.app.AppCompatActivity;

import android.os.Bundle;
import android.widget.TextView;

import java.util.Objects;

public class HelpActivity extends AppCompatActivity {

    private TextView txtHelp = null;
    private int istruzioni = 0;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_help);

        txtHelp = findViewById(R.id.txtHelp);
    }

    @Override
    protected void onResume() {
        super.onResume();
        istruzioni = Objects.requireNonNull(getIntent().getExtras()).getInt("istruzioni");
        txtHelp.setText(istruzioni);
    }
}
