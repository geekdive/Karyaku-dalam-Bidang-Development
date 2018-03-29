package id.septiyadii.accessmodifier;

import android.support.design.widget.Snackbar;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;

import id.septiyadii.accessmodifier.function.MyFunction;

public class MainActivity extends MyFunction {

    Button btnAction;
    EditText edtInput;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        btnAction = (Button)findViewById(R.id.btnShow);
        edtInput = (EditText)findViewById(R.id.edtInputUser);

        btnAction.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Snackbar snackbar = Snackbar.make(findViewById(R.id.layoutPrimary), "Input: " + edtInput.getText().toString(), Snackbar.LENGTH_LONG);
                snackbar.setAction("OK", new View.OnClickListener() {
                    @Override
                    public void onClick(View v) {
                        MyToas("Kamu Menekan Aksi OK pada SnackBar!");
                    }
                });
                snackbar.show();
            }
        });
    }
}
